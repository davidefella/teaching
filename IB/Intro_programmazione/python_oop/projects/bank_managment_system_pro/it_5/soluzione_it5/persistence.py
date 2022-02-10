import json
from json import JSONEncoder

class PersistenceHanlder: 
    relative_path_root = 'bank_managment_system_pro/it_5/soluzione_it5/data'

    def salva_banca(self,value): 
        bancaJSONData = json.dumps(value, indent=4, cls=ClassEncoder)
        self.__scrivi_su_file__(bancaJSONData, self.relative_path_root + "/dati_banca.json")

    def salva_conto(self,value): 
        contoJSONData = json.dumps(value, indent=4, cls=ClassEncoder)
        self.__scrivi_su_file__(contoJSONData, self.relative_path_root + "/dati_conto.json")

    def salva_cliente(self,value):
        clienteJSONData = json.dumps(value, indent=4, cls=ClassEncoder)
        self.__scrivi_su_file__(clienteJSONData, self.relative_path_root + "/dati_cliente.json")

    def __scrivi_su_file__(self,value, path): 
        f = open(path, "w")
        f.write(value)
        f.close()

class ClassEncoder(JSONEncoder):
    def default(self, o):
        return o.__dict__
