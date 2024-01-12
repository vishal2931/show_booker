<?php

function getAttachmentUrl($path = '')
{
    if ($path) {
        return asset('storage/'.$path);
    }

    return asset('images/placeholder.jpg');
}
