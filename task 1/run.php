foreach (
    array(
        "(())",
        "))((",
        "",
    )
    as $i => $string
) {
    echo $i, ': ', $string, '   '
        , (test($string))
            ? '+ok'
            : '-fail'
        , PHP_EOL
    ;
}