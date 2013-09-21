<?php
	
class lectorFeedNoticias
{
    public $xml;
    public $noticias=array();
    public function definir($url){
       $context  = stream_context_create(array('http' => array('header' => 'Accept: application/xml')));
       $this->xml = file_get_contents($url, false, $context);
	   $this->xml = simplexml_load_string($this->xml);
    }
    
    public function obtenerItems(){
		
		$feed=$this->xml->channel->item;
		
		foreach ($feed as $item){
			$noticia=array();
			$noticia['titulo']=utf8_decode($item->title);
			$noticia['link']=$item->link;
			//$noticia['entradilla']=$item->description;
			$noticia['imagen']=$item->enclosure['url'];
			//Insertamos el elemento noticia en el arreglo noticias
			array_push($this->noticias,$noticia);		
		}
		return $this->noticias;
	}
    
}	

?>
