import re
from collections import Counter
def top_3_words(text):
    occrs = re.findall("'*[a-z][a-z']*", text.lower())
    return [k for k,__ in Counter(occrs).most_common(3)]
