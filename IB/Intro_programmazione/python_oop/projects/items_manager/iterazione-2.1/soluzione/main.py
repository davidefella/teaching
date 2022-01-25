import csv

class Item:
    pay_rate = 0.8 #20% sconto
    all_items = []
    
    def __init__(self, name: str, price: float, quantity=0):
        assert price >= 0, f"Price {price} is not greater than or equal to zero!"
        assert quantity >= 0, f"Quantity {quantity} is not greater or equal to zero!"
       
        self.name = name
        self.price = price
        self.quantity = quantity

        Item.all_items.append(self)
        
    def __repr__(self):
        return f"Item({self.name}, {self.price}, {self.quantity})"

    def calculate_total_price(self):
        return self.apply_discount(self.price) * self.quantity

    def apply_discount(self, price):
        return price * self.pay_rate

    # completare il corpo della funzione
    def is_integer(self, num): 
        pass

    # completare il corpo della funzione
    def instantiate_from_csv(cls): 
        with open('IB\Intro_programmazione\python_oop\items_manager\iterazione-2.1\extra_exercises\items.csv', 'r') as f:
            pass


print(Item.all_items)
