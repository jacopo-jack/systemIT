<?php
function getDiskInformation()
{
    $diskInfo = [];

    $diskInfo[] = getDiskInfo("C:");
    $diskInfo[] = getDiskInfo("D:");
    $diskInfo[] = getDiskInfo("F:");

    return $diskInfo;
}

function getDiskInfo($diskName)
{
    $space = disk_total_space($diskName);
    $freeSpace = disk_free_space($diskName);

    $spaceMB = round($space / (1024 * 1024), 2);
    $freeSpaceMB = round($freeSpace / (1024 * 1024), 2);
    $spaceGB = round($space / (1024 * 1024 * 1024), 2);
    $freeSpaceGB = round($freeSpace / (1024 * 1024 * 1024), 2);

    return [
        'name' => $diskName,
        'spaceMB' => $spaceMB,
        'spaceGB' => $spaceGB,
        'freeSpaceMB' => $freeSpaceMB,
        'freeSpaceGB' => $freeSpaceGB,
    ];
}
?>
