<?php
function capturaTorre($torreBranca, $torrePreta)
{

    if (similar_text($torreBranca, $torrePreta)) {
        return true;
    } else {
        return false;
    }
}

