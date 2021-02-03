def find_missing_letter(chars):
    complete = [chr(x) for x in range(ord(chars[0]), ord(chars[-1]) + 1)]
    diff = set(complete) - set(chars)
    return diff.pop()




