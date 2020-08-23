A palindrome is a word, phrase, number or other sequence of characters which reads the same backward or forward. For instance: kayak or rotator.

Implement a boolean function called isAlmostPalindrome(strinfg word) which returns true either if the word is palindrome or if modifying just one character could make the word to be a palindrome;
Otherwise  it will return false(when two of more character must be changed to make the word as a palindrome). For this exercise. it is assumed that all the characters of the word will be received in lower case. It is not required to make any check on the case(upper/lower).

Examples:

isAlmostPalindrome(abccba) --> true //It is palindrome
isAlmostPalindrome(abccbx) --> true // It is a palindrome modifying the x to a
isAlmostPalindrome(abccfg) --> false // There is no way to obtain a palindrome modifying just one character. At least two character must be changed. For instance the f to b and g to a