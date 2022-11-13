
function f(name, seriya){
$sContent = file_get_contents('https://www.sakugabooru.com/post?tags=bleach+source%3A%23118');
      echo $sContent;
  return "Название: "+name+" Серия: " +seriya;
}
