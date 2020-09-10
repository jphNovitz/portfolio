<?php
header('content-type: text/css');
?>
#container {
width: 80vw;
margin: 40px auto;
height: 60vw;
display: flex;
flex-wrap: wrap;
}

.thumb {
background-size: 80vw;
width: 20vw;
min-width: 20vw;
height: 20vw;
}

#result{
background-color: rgba(255, 255, 255, .9);
width: 100%;
height: 100%;
position: absolute;
z-index: 0;
opacity: 0;
visibility: hidden;
}

#indice{
position: absolute;
top: -25px;
z-index: -1;
width: 80%;
transition: all 2s ease;
}

#t1 {
background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/out-league.png');
background-position: top 0vw left 0vw;
}

#t2 {
background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/out-league.png');
background-position: top 0vw right 40vw;
}

#t3 {
background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/out-league.png');
background-position: top 0vw right 60vw;
}

#t4 {
background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/logo_prestashop.png');
background-position: top 0vw right 80vw;
}

#t5 {
background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/logo_prestashop.png');
background-position: bottom 40vw left 0vw;
}

#t6 {
background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/logo_prestashop.png');
background-position: bottom 40vw right 40vw;
}

#t7 {
background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/logo_prestashop.png');
background-position: bottom 40vw right 60vw;
}

#t8 {
background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/logo_prestashop.png');
background-position: bottom 40vw right 80vw;
}

#t9 {background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/logo_prestashop.png');
background-position: bottom 60vw left 0vw;
}

#t10 {
background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/logo_prestashop.png');
background-position: bottom 60vw right 40vw;
}

#t11 {
background-position: bottom 60vw right 60vw;
}

/*#t1 {*/
/*background-position: bottom 60vw right 80vw;*/
/*}*/

#t12 {
background-image: none;
background-color: #ffffff;
/*background-position: bottom 500px left 0px;*/
}

@media screen and (min-width: 900px) {
#container {
width: 440px;
margin: 40px auto;
height: 330px;
display: flex;
flex-wrap: wrap;
}

.thumb {
background-image: url("../img/out-league.png");
background-size: 440px;
width: 110px;
min-width: 110px;
height: 110px;
}

#t1 {
background-position: top 0px left 0px;
}

#t2 {
background-position: top 0px right 220px;
}

#t3 {
background-position: top 0px right 330px;
}

#t4 {
background-position: top 0px right 440px;
}

#t5 {
background-position: bottom 220px left 0px;
}

#t6 {
background-position: bottom 220px right 220px;
}

#t7 {
background-position: bottom 220px right 330px;
}

#t8 {
background-position: bottom 220px right 440px ;
}

#t9 {
background-position: bottom 330px left 0px;
}

#t10 {
background-position: bottom 330px right 220px;
}

#t11 {
background-position: bottom 330px right 330px;
}

/*#t1 {*/
/*background-position: bottom 60vw right 80vw;*/
/*}*/

#t12 {
background-image: none;
background-color: #ffffff;
/*background-position: bottom 500px left 0px;*/
}

