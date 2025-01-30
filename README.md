# PHP Foreach Loop Modification Issue
This example demonstrates a common error in PHP when modifying an array while iterating over it using a `foreach` loop.  The original `my_function` function incorrectly skips elements because the array's internal pointer changes when an element is removed.  The corrected `my_function_correct` function uses `array_filter` for a cleaner and more efficient solution.

## Bug
The original `my_function` shows how modifying the array during iteration leads to unexpected results. 

## Solution
The `my_function_correct` function uses the `array_filter` function. This is a more efficient and readable way to remove elements from an array based on a condition.