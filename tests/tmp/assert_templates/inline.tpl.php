<?php
$HAANGA_VERSION  = '1.1.3';
/* Generated from /home/crodas/projects/playground/haanga/tests/assert_templates/inline.tpl */
function haanga_f59d9314f581283c9140ff747fa5e3efeadc54a7($vars, $return=FALSE, $blocks=array())
{
    global $test_global;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    $buffer1  = '
Foobar text
Partial part

';
    $buffer2  = '
    another text
';
    $html1  = $buffer2;
    $buffer1 .= '
'.htmlentities($html1).'

';
    $html  = $buffer1;
    echo '
'.htmlentities($html).'
';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}