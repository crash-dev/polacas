<?
	
class lectorFeedEventos
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
			$imagenes=array();
			$noticia['titulo']=utf8_decode($item->title);
			$noticia['link']=$item->link;
			//$noticia['entradilla']=preg_match("/<img src='(.*)'/",$item->description,$imagenes);
			preg_match("/<img src='(.*)'/",$item->description,$imagenes);
			
			$noticia['imagen']=$imagenes[1];
			 
			//Insertamos el elemento noticia en el arreglo noticias
			array_push($this->noticias,$noticia);		
		}
		return $this->noticias;
	}
    
}



?>
