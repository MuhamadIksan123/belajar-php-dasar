<?php

goto a;
echo "Hello World";

a:
echo "Hello A";

$counter = 1;

while(true) {
    echo "Counter: $counter" . PHP_EOL;
    $counter++;
    if($counter > 10) {
        goto end;
    }
}

end:
echo "End Loop";