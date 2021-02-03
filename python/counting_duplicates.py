from collections import Counter

def duplicate_count(text):
    return sum(1 for x in Counter(text.lower()).values() if x > 1)


print(duplicate_count(""), 0)
print(duplicate_count("abcde"), 0)
print(duplicate_count("abcdeaa"), 1)
print(duplicate_count("abcdeaB"), 2)
print(duplicate_count("Indivisibilities"), 2)
