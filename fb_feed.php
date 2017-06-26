<?php
ini_set("allow_url_fopen", 1);
date_default_timezone_set('UTC');

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
    foreach ($feed->data as $i => $post){
        if(isset($post->message)){
            $object_id = getContent($post->id . "?fields=object_id&")->object_id;
            if(isset($object_id)){
                $img_url = getGraphUrl($object_id . "/picture?");
                //$img_url = "https://graph.facebook.com/" . $object_id . "/picture";
                $short = (getimagesize($img_url)[1] < 170 ? true : false);
                if($short){
                    $img_url = "images/empty.png";
                }
                $date = new DateTime($post->created_time);
                $formated_data = $date->format('d.m.Y');
                array_push($posts, array('id' => $post->id,'message' => $post->message,
                 'img_url' => $img_url, 'date' => $formated_data));
                //echo "<img src='". $img_url ."'  />";
            }
        }
        if(count($posts) == 6){
          break;
        }
    }
}
?>

<?php
    $reverse_i = array(1,2,5);

    for($i = 0; $i < 6; $i++){
    if($i%2 == 0){
        ?> <div class="row row-square"> <?php
    } ?>
    <div class="col-md-6 col-sm-12 half-row-square <?php if(in_array($i,$reverse_i)) echo "reversed-square"; ?>">
      <?php if(!in_array($i, array(2, 3))){ ?>
      <div class="col-sm-6 square top-animated top-animated-b top-animated-l-<?php echo $i; ?>">
        <div class="square-img" style="background-image:url(<?php echo $posts[$i]['img_url'] ?>)">
          <a href="https://www.facebook.com/<?php echo $posts[$i]['id'] ?>" target="_blank" class="full-a"></a>
        </div>
      </div><?php } ?>
      <div class="col-sm-6 square square-text top-animated top-animated-b top-animated-<?php echo $i; ?>">
        <div class="square-top">
          <?php echo $posts[$i]['date']; ?>
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
      <div class="col-sm-6 square top-animated top-animated-b top-animated-r-<?php echo $i; ?>">
        <div class="square-img" style="background-image:url(<?php echo $posts[$i]['img_url'] ?>)">
          <a href="https://www.facebook.com/<?php echo $posts[$i]['id'] ?>" target="_blank" class="full-a"></a>
        </div>
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
