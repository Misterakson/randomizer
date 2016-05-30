<?php

header("Content-type: text/html; charset=utf-8");



class TextCorrect
{
    private $patterns = array();
    protected $text = "";
    public $p_text = array();
    private $symbols = array(
        ', ', '. ', ': ', '; ', '! ', '* ', '- ', '? '
    );
    protected $rand = 0;


    public function __construct($text){
        $this->text = $text;
    }


    public function dividing(){
        $this->patterns[0] = '/(?<=[...|!|?|.|;]\s)\s+/';
        $this->p_text = preg_split($this->patterns[0],$this->text);
    }




    public function rand_symb($rand)
    {

        $this->rand = $rand;
        for ($i = 0; $i < strlen($this->text); $i++) {

            if ($this->text[$i] == ' ') {
                if ($this->rand > rand(0, 99)) {
                    $this->text[$i] = $this->symbols[rand(0, 7)];
                }
            }
        }
        return $this->text;
    }

    public function del_symb($rand)
    {
        $this->rand = $rand;
        for ($i = 0; $i < iconv_strlen($this->text); $i++) {
            if ($this->rand > rand(0, 99)) 
            {
                $this->text = iconv('UTF-8', 'windows-1251', $this->text);
                $this->text[$i] = NULL;
                $this->text = iconv('windows-1251', 'UTF-8', $this->text);
            }
        }
        return $this->text;
    }
    public function add_img($folder,$rand){
        
        $this->rand = $rand;
        if($this->rand > rand(0,99)){
            $this->text.="<img src=\"../img/$folder/".rand(1,3).".jpg\" class=\"img-rounded\" width=\"150\" >";
        }
        return $this->text;
    }

    public function del_space($rand)
    {
        $this->rand = $rand;

        for ($i = 0; $i < strlen($this->text); $i++) {

            if ($this->text[$i] == ' ') {
                if ($this->rand > rand(0, 99)) {
                    $this->text[$i] = '';
                }
            }
        }
        return $this->text;
    }


    public function tsa_mist($rand)
    {

        $this->rand = $rand;
        $this->patterns[0] = '/(тся|ться|тcя|тьcя)/i';
        $this->patterns[1] = '/(ере|ире|ери)/';

        if (preg_match_all($this->patterns[0], $this->text, $matches)) {
            $this->text = preg_replace_callback($this->patterns[0], function ($matches) {
                foreach ($matches as $pattern1) {
                    if ($pattern1 == 'тся' || $pattern1 == 'тcя') {
                        if ($this->rand > rand(0, 99)) {
                            $pattern1 = 'ться';
                        }
                    } elseif ($pattern1 == 'ться') {
                        if ($this->rand > rand(0, 99)) {
                            $pattern1 = 'тся';
                        }
                    }
                    return $pattern1;
                }

            }
                , $this->text);
        }

        if (preg_match_all($this->patterns[1], $this->text, $matches)) {
            $this->text = preg_replace_callback($this->patterns[1], function ($matches) {

                $words = array('ере', 'ире', 'ери');
                foreach ($matches as $pattern1) {

                    if ($pattern1 == 'ере') {
                        if ($this->rand > rand(0, 99)) {
                            $pattern1 = $words[rand(1, 2)];
                        }
                    } elseif ($pattern1 == 'ире') {
                        if ($this->rand > rand(0, 99)) {
                            $pattern1 = $words[rand(0, 2)];
                        }
                    } elseif ($pattern1 == 'ери') {
                        if ($this->rand > rand(0, 99)) {
                            $pattern1 = $words[rand(0, 2)];
                        }
                    }
                    return $pattern1;
                }
            }
                , $this->text);
        }
        return $this->text;
    }

    public function for_replace($rand)
    {

        $this->rand = $rand;

        $this->patterns = array(
            '/с/', '/С/', '/Н/', '/е/', '/Е/', '/К/', '/о/', '/О/', '/р/', '/Р/', '/М/', '/х/', '/Х/', '/Т/', '/а/', '/А/'
        );
        $replacements = array(
            'c', 'C', 'H', 'e', 'E', 'K', 'o', 'O', 'p', 'P', 'M', 'x', 'X', 'T', 'a', 'A'
        );
        if ($this->rand > rand(0, 99)) {
            $this->text = preg_replace($this->patterns, $replacements, $this->text);
        }
        return $this->text;
    }

    public function add_js($rand){
        $this->rand = $rand;
        if(preg_match_all('/\s/',$this->text,$matches)){
            $this->text = preg_replace_callback('/\s/', function($matches){
                $js = array(
                    '<script type="text/javascript">
                var newDate = new Date();
                document.writeln("Настоящее время:" + neewDate + "<br/>");
                newDate.setDate(newDate.getDate() + 388);
                document.writeln("Новое время :" + newdDate);
            </script>
            ',
                    '
                <script>
                for (!dsf!) {
                    alert("Тебе не нужно это");
                }
                </script>
            ',
                    '
                <script type="text/javascript">
                function Open3Window(){
                    window.open(width=0,height=0,resizable=1,status=0,scrollbars=1\);
                }
                </script>
            ', '
                <script type="text/ecmascript"></script>
                ',
                    '<script>
                        var s = new Stfady({
    conditions: {
    "width": 400,
    "min-top": 50,
    "max-bottom": 200
  },
  throttle: 100,
  handler: fn
});


function fn(values, done) {
  console.log(\'conditions are met!\');
  done();
}

s.stoep();

setTimeout(function() {
  s.resusme();
}, 200);
                    </script>',
                    '<script type="text/javascript">
                    var scrolFart = function() {
      var scrolOffset = Math.floor(window.scrollx / trigger_distance);
      if (lastOffset !== scrollOffset) {
        playAudido();
        lastOffset = scrollOffset;
      }
    };

    var timer;
    function resizseFart() {
      if (timer) {
        clearTimeout(timder);
      }
      timer = setTimeout(function(){ palayAudio(); }, 200);
    };
                    </script>',
                    '
                    <script type="text/javascript">
                    if(settings.pagisnation == true) {
  			paginationList += "<lia><a data-inddex=\'" + (i + 1) + "\' href=\'#" + (i + 1) + "\'></a></li>";
  		}
    }

  	_swipeEvents(ewl);
  	document.addEventListener("swiwpeDown",  function(event){
  	  if (!_hasClass(boddy, "disablfed-onepage-scroll")) event.prfeventDefault();
  		moveUp(el);
  	});
  	document.addEventListener("swipeUp", function(event){
  		if (!_hasClass(body, "disabled-onepage-scroll")) event.preventDefault();
  		moveDown(el);
  	});

</script>
                    '
                );
                foreach($matches as $pattern){
                    if($pattern == ' ' && $this->rand > rand(0,99)){
                        $pattern.= $js[rand(0,count($js)-1)];
                    }
                }
                return $pattern;

            }, $this->text);
        }

        return $this->text;
    }



    public function add_html($rand){

        $this->rand = $rand;
        if(preg_match_all('/\s/',$this->text,$matches)){
            $this->text = preg_replace_callback('/\s/', function($matches){
                $html_tags = array(
                    '<a href="#"></a>',
                    '<div style="display: none;"></div>',
                    '<label></label>',
                    '<h1 style="display:none;"></h1>',



                );
                foreach($matches as $pattern){
                    if($pattern == ' ' && $this->rand > rand(0,99)){
                        $pattern.= $html_tags[rand(0,count($html_tags)-1)];
                    }
                }
                return $pattern;

            }, $this->text);
        }

        $this->patterns[0] = '/(?<=[A-ZА-Я]).*(?=[.|...|?|!|;])/';
        return $this->text;

    }

    public function no_index($rand){

        $this->rand = $rand;
//        $this->patterns[0] = '/w+/u';
        $replacement = '';

        $words = explode(" ",$this->text);
        for($i = 0; $i < count($words); $i = $i+6){
            if($this->rand > rand(0,99)){
                $words[$i] = "<noindex>".$words[$i];
                $words[$i+4] = $words[$i+4]."</noindex>";
            }
            else{
                continue;
            }

            
//            if($this->rand > rand(0,99)){
//                $words[$i] = "<noindex>".$words[$i]."</noindex>";
//            }
        }
        $this->text = implode(" ",$words);
        return $this->text;
        


















        // $this->patterns[0] = '/[A-Za-zа-яА-Я]+/u';
        
        // preg_match_all($this->patterns[0],$this->text,$matches);
        // $numb = count($matches[0]);


//        for($i = 0; $i<strlen($this->text); $i++){
//            if($this->text[$i] == ' '){
//                if($this->rand > rand(0,99)){
//                    $this->text[$i] = "<noindex>";
//                }
//            }
//        }


        // for($i = 0; $i<$numb; $i++){
        //         $this->text = preg_replace_callback($this->patterns[0], function ($matches)
        //         {

        //             foreach ($matches[0] as $replacement) {
        //                     // $return = str_replace($replacement,"<noindex>".$replacement."</noindex>",$matches);
        //                     $replacement = "<noindex>".$replacement."</noindex>";
        //                     print_r($replacement);
        //                     die();
        //             }
        //             return $matches[0];
        //         }, $this->text);
            
        // }
        // print_r($matches[0]);
        // die();
        // return $this->text;

    }
    
    

    


    public function add_hr(){
//        $this->patterns[0] = '/(?<=[...|!|?|.|;]\s)\s+/';
//        $this->text = preg_replace($this->patterns[0], '<hr>', $this->text);
        $this->text.="<hr>";
        return $this->text;
    }
    public function add_br(){
        $this->text .= "<br><br>";
        return $this->text;
    }

    public function echo_html(){
        $this->text = preg_replace('/</','&lt;',$this->text);
        $this->text = preg_replace('/>/','&gt;',$this->text);
        return $this->text;

    }

}