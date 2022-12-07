<?php
    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {

        $nums = array_merge($nums1, $nums2);
        sort($nums);
        $count = count($nums);
        if ($count % 2 == 0) {
            $median = ($nums[$count / 2] + $nums[$count / 2 - 1]) / 2;
        } else {
            $median = $nums[floor($count / 2)];
        }
        return $median;
    }
?>