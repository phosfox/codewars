from collections import Counter
def delete_nth(order, max_e):
    counts = Counter(order)
    rev_order = order[::-1]
    for k,v in counts.items():
        for _ in range(v-max_e):
            rev_order.remove(k)
    return rev_order[::-1]
