package bygolang

func maxArea(height []int) int {
	max, left, right := 0, 0, len(height)-1

	for left < right {
		width := right - left

		high := 0

		if height[left] < height[right] {
			high = height[left]
			left++
		} else {
			high = height[right]
			right--
		}

		temp := width * high

		if temp > max {
			max = temp
		}
	}

	return max
}
