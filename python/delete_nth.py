from collections import Counter
def delete_nth(order, max_e):
    counts = Counter(order)
    rev_order = order[::-1]
    for k,v in counts.items():
        for _ in range(v-max_e):
            rev_order.remove(k)
    return rev_order[::-1]

print(delete_nth([20,37,20,21], 1), [20,37,21])
print(delete_nth([1,1,3,3,7,2,2,2,2], 3), [1, 1, 3, 3, 7, 2, 2, 2])
