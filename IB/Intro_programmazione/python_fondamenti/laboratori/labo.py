def multidimensional(list_element):
    nums = []
    for i in range(3):
        nums.append([])
        for j in range(list_element):
            nums[i].append(0)

    return nums

n = int(input("Quanti elementi per sottolista?")) 
print(multidimensional(n)) 
