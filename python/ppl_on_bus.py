def number(bus_stops):
    pps = 0
    for on, off in bus_stops:
        pps += on
        pps -= off
    return pps


print(number([[10,0],[3,5],[5,8]]),5)
print(number([[3,0],[9,1],[4,10],[12,2],[6,1],[7,10]]),17)
print(number([[3,0],[9,1],[4,8],[12,2],[6,1],[7,8]]),21)
