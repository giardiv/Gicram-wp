<?php
ini_set("allow_url_fopen", 1);

$dev = false;

function getGraphUrl($param){
    return "https://graph.facebook.com/". $param ."access_token=747507452095376|f6820e656220a1284a717db298497e95";
}
function getContent($param){
    $url = getGraphUrl($param);
    return json_decode(file_get_contents($url));
}
$feed = getContent("419932878051585/feed?");
$posts = array();

if(!$dev){
    foreach ($feed->data as $i => $post) {
        if(isset($post->message)){
            $object_id = getContent($post->id . "?fields=object_id&")->object_id;
            if(isset($object_id)){
                $img_url = "https://graph.facebook.com/" . $object_id . "/picture";
                $short = (getimagesize($img_url)[1] < 170 ? true : false);
                if($short){
                    $img_url = "images/empty.png";
                }
                array_push($posts, array('id' => $post->id,'message' => $post->message,
                 'img_url' => $img_url, 'date' => $post->created_time));
                //echo "<img src='". $img_url ."'  />";
            }
        }
    }
}
?>

<?php for($i = 0; $i < 6; $i++){
    if($i%2 == 0){
        ?> <div class="row row-square"> <?php
    } ?>
    <div class="col-md-6 half-row-square">
      <?php if(!in_array($i, array(2, 3))){ ?>
      <div class="col-md-6 square square-img animated top-animated-l-<?php echo $i; ?>"
      style="background-image:url(<?php echo $posts[$i]['img_url'] ?>)">
        <a href="https://www.facebook.com/<?php echo $posts[$i]['id'] ?>" target="_blank" class="full-a"></a>
      </div><?php } ?>
      <div class="col-md-6 square square-text animated top-animated-<?php echo $i; ?>">
        <div class="square-top">
          21.01.2017
          <span class="plus">
            <span class="plus-h"></span>
            <span class="plus-v"></span>
            <a href="https://www.facebook.com/<?php echo $posts[$i]['id'] ?>" target="_blank" class="full-a"></a>
          </span>
        </div>
        <div class="square-top square-message">
            <?php echo $posts[$i]['message'] ?>
        </div>
      </div>
      <?php if(in_array($i, array(2, 3))){ ?>
      <div class="col-md-6 square square-img animated top-animated-r-<?php echo $i; ?>" style="background-image:url(<?php echo $posts[$i]['img_url'] ?>)">
        <a href="https://www.facebook.com/<?php echo $posts[$i]['id'] ?>" target="_blank" class="full-a"></a>
      </div><?php } ?>
    </div>
  <?php if($i % 2 != 0 ){ ?>
  </div>
 <?php }
}
?>

<a class="top-1 center-block btn btn-primary" style="width:180px;margin:40px auto" target="_blank" style="width:180px" href="https://www.facebook.com/Gicram-Groupe-419932878051585/">
   Plus d'actualités
</a>