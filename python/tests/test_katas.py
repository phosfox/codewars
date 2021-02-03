from ..multiples import solution
from ..counting_duplicates import duplicate_count
from ..delete_nth import delete_nth
from ..ppl_on_bus import number
from ..missing_letter import find_missing_letter
from ..find_even_index import find_even_index
from ..top_3_words import top_3_words


def test_multiples():
    assert solution(10) == 23


def test_counting_duplicates():
    assert duplicate_count("") == 0
    assert duplicate_count("abcde") == 0
    assert duplicate_count("abcdeaa") == 1
    assert duplicate_count("abcdeaB") == 2
    assert duplicate_count("Indivisibilities") == 2


def test_delete_nth():
    assert delete_nth([20, 37, 20, 21], 1) == [20, 37, 21]
    assert delete_nth([1, 1, 3, 3, 7, 2, 2, 2, 2], 3) == [
        1, 1, 3, 3, 7, 2, 2, 2]


def test_ppl_on_bus():
    assert number([[10, 0], [3, 5], [5, 8]]) == 5
    assert number([[3, 0], [9, 1], [4, 10], [12, 2], [6, 1], [7, 10]]) == 17
    assert number([[3, 0], [9, 1], [4, 8], [12, 2], [6, 1], [7, 8]]) == 21


def test_missing_letter():
    assert find_missing_letter(['a', 'b', 'c', 'd', 'f']) == 'e'
    assert find_missing_letter(['O', 'Q', 'R', 'S']) == 'P'


def test_find_even_index():
    assert find_even_index([1, 2, 3, 4, 3, 2, 1]) == 3
    assert find_even_index([1, 100, 50, -51, 1, 1]) == 1
    assert find_even_index([1, 2, 3, 4, 5, 6]) == -1
    assert find_even_index([20, 10, 30, 10, 10, 15, 35]) == 3
    assert find_even_index([20, 10, -80, 10, 10, 15, 35]) == 0
    assert find_even_index([10, -80, 10, 10, 15, 35, 20]) == 6
    assert find_even_index(list(range(1, 100))) == -1
    assert find_even_index([-1, -2, -3, -4, -3, -2, -1]) == 3
    assert find_even_index(list(range(-100, -1))) == -1
    assert find_even_index([0, 0, 0, 0, 0]) == 0


def test_top_3_words():
    assert top_3_words(
        "a a a  b  c c  d d d d  e e e e e") == ["e", "d", "a"]
    assert top_3_words(
        "e e e e DDD ddd DdD: ddd ddd aa aA Aa, bb cc cC e e e") == ["e", "ddd", "aa"]
    assert top_3_words("  //wont won't won't ") == ["won't", "wont"]
    assert top_3_words("  , e   .. ") == ["e"]
    assert top_3_words("  ...  ") == []
    assert top_3_words("  '  ") == []
    assert top_3_words("  '''  ") == []
    assert top_3_words("""In a village of La Mancha, the name of which I have no desire to call to
mind, there lived not long since one of those gentlemen that keep a lance
in the lance-rack, an old buckler, a lean hack, and a greyhound for
coursing. An olla of rather more beef than mutton, a salad on most
nights, scraps on Saturdays, lentils on Fridays, and a pigeon or so extra
on Sundays, made away with three-quarters of his income.""") == ["a", "of", "on"]
