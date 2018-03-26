<?php
// 5.Дана строка 'a1a a22a a333a a4444a a55555a aba aca'.
// Напишите регулярку, которая найдет строки, в которых по краям стоят буквы 'a',
// а между ними любое количество цифр
echo preg_replace('#a\d+a#', '!', 'a1a a22a a333a a4444a a55555a aba aca').'<br>'.'<br>';

// 8.Дана строка 'ave a#b a2b a$b a4b a5b a-b acb'.
// Напишите регулярку, которая найдет строки следующего вида:
// по краям стоят буквы 'a' и 'b', а между ними - не буква и не цифра.
echo preg_replace('#a\Wb#', '!', 'ave a#b a2b a$b a4b a5b a-b acb').'<br>'.'<br>';

// 19. Дана строка 'aAXa aeffa aGha aza ax23a a3sSa'.
// Напишите регулярку, которая найдет строки следующего вида:
// по краям стоят буквы 'a', а между ними - маленькие и большие латинские буквы, не затронув остальных.
echo preg_replace('#a[a-zA-Z]+a#', '!', 'aAXa aeffa aGha aza ax23a a3sSa').'<br>'.'<br>';