from collections import Counter
def duplicate_count(text):
    return sum(1 for x in Counter(text.lower()).values() if x > 1)
