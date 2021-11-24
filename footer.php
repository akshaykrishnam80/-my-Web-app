<?php


function get_footer ($condition=true){
$html ='';


if($condition){
$html .='<footer>';
$html .='<pre class="about-copyright">© 2021 MoJO 90*</pre>';
$html .='</footer>';
}


$html .='
<script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="custom.js" crossorigin="anonymous"></script>


</body>


</html>';

echo $html;

}

?>