<?php
function findCommonElements($nums1, $nums2) {
    $common = array_intersect($nums1, $nums2);

    return array_values(array_unique($common));
}

$nums1 = [1, 2, 3, 4, 5];
$nums2 = [2, 2];
$result = findCommonElements($nums1, $nums2);

if (!empty($result)) {
    echo "[" . implode(", ", $result) . "]";
} else {
    echo "[]";
}
?>
