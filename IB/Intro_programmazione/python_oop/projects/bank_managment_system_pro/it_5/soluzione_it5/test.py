import unittest
from banca import Banca

class TestSum(unittest.TestCase):

    def test_banca(self): 
        b = Banca('Banca San Paolo')
        self.assertEqual(len(b.clienti), 0, 'Test 1 - b.clienti dovrebbe essere vuoto')

    def test_sum(self):
        self.assertEqual(sum([1, 2, 3]), 6, "Should be 6")

    def test_sum_tuple(self):
        self.assertEqual(sum((1, 2, 2)), 6, "Should be 6")

if __name__ == '__main__':
    unittest.main()