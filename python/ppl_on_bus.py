def number(bus_stops):
    pps = 0
    for on, off in bus_stops:
        pps += on
        pps -= off
    return pps



