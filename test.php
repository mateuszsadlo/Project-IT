<?php
/*
Template Name: write test
*/
?>
<!-- header -->
<?php get_header(); ?>

<meta charset="UTF-8">
<!-- body -->
<section id="main-content" class="clearfix">

    <section id="main-content-inner" class="container">

    <div class="article-container post">

        <?php while ( have_posts() ) : the_post(); ?>

        <header class="clearfix">

            <div class="article-details">

                <h1 class="title"><?php the_title(); ?></h1>

                <div class="meta">

                    <span class="date"><?php the_time( get_option( 'date_format' ) ); ?></span>

                </div><!-- end .meta -->

            </div><!-- end .article-details -->  

        </header>

           

        <article class="clearfix">

            <?php the_content(); ?>
			<?php wp_link_pages(); ?>
			
     


        <?php endwhile; ?>

            
    </div><!-- end .article-container -->
    </section><!-- end .main-content-inner -->

</section><!-- end #main-content -->



	<?php
	


	$servername = "sql.henetplue.nazwa.pl";
	$username = "henetplue";
	$password = "Szafirek12!@";
	$dbname = "henetplue";

	// Create connection

	$conn = new mysqli($servername, $username, $password, $dbname);
		$conn->set_charset("utf8");
	//
	//header('Content-type: text/plain; charset=utf-8');
	
	
$sql = "Select * from teksty";
$result = $conn->query($sql);

$textInfo= array();
$index = 0;
while($row = $result->fetch_assoc())
{
	$textInfo[$index] = $row;
	$index++;
}




	// Check connection
		?>
		<script>
var i=0;
var li;
var jsonText = <?php echo json_encode($textInfo); ?>;
while(i< '<?php echo $index;?>')
{
	
$(function () {
  function ClickRefresh() {
    console.log("Clicked Refresh");
    $("body").append("<br>Clicked Refresh");
  }
  function createRefreshButton() {
    var $btn = $('<button />', {
      type: 'button',
      text: 'Zmien tekst',
      id: jsonText[i]['id']
    }).click(ClickRefresh);
    return $btn;
  }
});
	
		
	
	
li=$("<tr>"+"<td>"+jsonText[i]['id']+"</td>"+"<td>"+jsonText[i]['tytul']+"</td>"+"<td>"+createRefreshButton())+"</td>"+"</tr>");
$("#tekstyHtml table").append(li);
i++;






}		
time_setting = 30;
random_setting = 100;

input_text =  '<?php echo $textInfo[2]['naglowek'];?>'
//input_text =  '<?php echo 'ŹŹŹŹŹŹŹŹŹ'?>'
target_setting = $("#output");
type(input_text, target_setting, 0, time_setting, random_setting);

function type(input, target, current, time, random){
	if(current > input.length){
		console.log("Complete.");
	}
	else{
		current += 1;
		target.text(input.substring(0,current));
		setTimeout(function(){
			type(input, target, current, time, random);
		},time + Math.random()*random);
	}
}





var character_length = 35;
var index = 0;
var letters =  '<?php echo $textInfo[2]['tekst'];?>';
var started = false;
var current_string = letters.substring(index, index + character_length);
var charTyped="";
var currentInput="";
var errIndex=0;
var err=0;
var currentLength;
var wordcount = 0;
$("#target").text(current_string);


$(window).on('keypress keyup',function(evt){
	  var charCode = evt.which || evt.keyCode; //to work on all browsers
	
	if(evt.type=='keyup')
	{
	if(charCode==8)
	{
	  if(err>0)
	  {
	   err--;
	  $("#your-attempt").contents().filter((_, el) => el.nodeType === 3).remove();
	  $('#your-attempt').find("span").remove();
	  
	 currentLength=currentInput.length;
	 currentInput=currentInput.substring(0,currentLength-1);
	 $("#your-attempt").text(currentInput);
	  }
  }
		
	}
	
	else
	{
  if(!started){
    start();
    started = true;
  }

  var temp=charTyped;
  charTyped = String.fromCharCode(charCode);
  if(charTyped == letters.charAt(index)&&err==0){
	 currentInput+=charTyped;
    if(charTyped == " "){
      wordcount ++;
      $("#wordcount").text(wordcount);
    }
    index ++;
    current_string = letters.substring(index, index + character_length);
    $("#target").text(current_string);
    $("#your-attempt").append(charTyped);
    if(index == letters.length){
      wordcount ++;
      $("#wordcount").text(wordcount);
      $("#timer").text(timer);
      if(timer == 0){
        timer = 1;
      }
      wpm = Math.round(wordcount / (timer / 60));
      $("#wpm").text(wpm);
      stop();
      finished();
    }
  }

  
  else if(charCode!=8){
	err++;
	errIndex=index+err;
	 currentInput+=charTyped;
    $("#your-attempt").append("<span class='wrong'>" + charTyped + "</span>");
    errors ++;
    $("#errors").text(errors);
  }
  
	}

});

var timer = 0;
var wpm = 0;
var errors = 0;
var interval_timer;


function start(){
  interval_timer = setInterval(function(){
    timer ++;
    $("#timer").text(timer);
    wpm = Math.round(wordcount / (timer / 60));
    $("#wpm").text(wpm);
  }, 1000)
}

function stop() {
  clearInterval(interval_timer);
  started = false;
}
function finished(){
  alert("Gratulacje!\nSłowa na minutę: " + wpm + "\nIlość słów: " + wordcount + "\nIlość błędów:" + errors);
}



function reset(){
  $("#input_text").blur();
  $("#your-attempt").text("");
  index = 0;
  errors = 0;
  clearInterval(interval_timer);
  started = false;
  //letters = $("#input_text").val();
  $("#wpm").text("0");
  $("#timer").text("0");
  $("#wordcount").text("0");
  $("#errors").text("0");
  timer = 0;
  wpm = 0;
  currentInput="";
  current_string = letters.substring(index, index + character_length);
  $("#target").text(current_string);
}

$("#reset").click(function(){
  reset();
});




$(document).unbind('keydown').bind('keydown', function (event) {
    if (event.keyCode === 8) {
        var doPrevent = true;
        var types = ["text", "password", "file", "search", "email", "number", "date", "color", "datetime", "datetime-local", "month", "range", "search", "tel", "time", "url", "week"];
        var d = $(event.srcElement || event.target);
        var disabled = d.prop("readonly") || d.prop("disabled");
        if (!disabled) {
            if (d[0].isContentEditable) {
                doPrevent = false;
            } else if (d.is("input")) {
                var type = d.attr("type");
                if (type) {
                    type = type.toLowerCase();
                }
                if (types.indexOf(type) > -1) {
                    doPrevent = false;
                }
            } else if (d.is("textarea")) {
                doPrevent = false;
            }
        }
        if (doPrevent) {
            event.preventDefault();
            return false;
        }
    }
});

$(document).on("keypress", function(e) {
    var $focusElem = $(":focus");
    if(e.which == 32 && !($focusElem.is("input") || $focusElem.attr("contenteditable") == "true"))
        e.preventDefault();
});	



document.querySelectorAll("button").forEach( function(item) {
    item.addEventListener('focus', function() {
        this.blur();
    })
})


</script>
