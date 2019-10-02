import hashlib
import sys
#ZBOUB
class Block:
    content = ""
    previousHash = ""
    currentHash = ""
    def __init__(self, content):
        self.content = content
    
class BlockChain:
    chain = []
    def __init__(self):
        chain = []      
    def getLastBlock(self):
        return self.chain[-1]
    
    def printChain(self):
        for block in self.chain:
            print(block.content + " | " + block.currentHash + " | " + block.previousHash)
            
    def addBlock(self, block):
        if(len(self.chain) > 0):
            block.previousHash = self.getLastBlock().currentHash
            temp = hashlib.sha256()
            temp.update(block.previousHash + block.content)
            block.currentHash = temp.hexdigest()
            self.chain.append(block)
        else:
            temp = hashlib.sha256()
            temp.update(block.content)
            block.currentHash = temp.hexdigest()
            self.chain.append(block)
            
    def chainValidity(self):
        valid = True
        for i in range(0, len(self.chain)):
            if(i > 0):
                if(self.chain[i].previousHash != self.chain[i - 1].currentHash):
                    valid = False
                    
                temp = hashlib.sha256()
                temp.update(self.chain[i].previousHash + self.chain[i].content)
                
                if(self.chain[i].currentHash != temp.hexdigest()):
                    valid = False
                    
            else:
                temp = hashlib.sha256()
                temp.update(self.chain[i].content)
                if(self.chain[i].currentHash != temp.hexdigest()):
                    valid = False
                    
        return valid
                
            


blockchain1 = BlockChain()
block1 = Block("Ceci est un test")
block2 = Block("Alors il faut tester")
block3 = Block("Les fonctionnalites")
block4 = Block("De cette pseudo merde")
blockchain1.addBlock(block1)
blockchain1.addBlock(block2)
blockchain1.addBlock(block3)
blockchain1.addBlock(block4)
block2.content = "Test" #Si on essaie de modifier un block après l'ajout à la chaine, le test chainValidity ne passe pas
temp = hashlib.sha256()
temp.update(block2.previousHash + block2.content)
block2.currentHash = temp.hexdigest()
blockchain1.printChain()
print(blockchain1.chainValidity())