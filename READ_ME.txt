1) dopo la lettura del brief ho progettato il database aiutandomi con il sito drawSQL
admin --relazione one to many-- ticket (l'admin può creare più ticket, ma un ticket appartiene ad un solo admin);
ticket --relazione one to many-- operatore (il ticket può essere assegnato a un solo operatore, ma un operatore può avere più ticket assegnati)
ticket --relazione one to many-- categoria (il ticket può appartenere a una sola categoria, ma una categoria può contenere più ticket)

2) ho creato le migrations delle tabelle progettate nel database

3) ho creato i models delle tabelle, aggiungendo le funzioni per le relazioni

4) ho creato i seeders delle tabelle utilizzando, per la tabella Tickets, il faker che mi genera una frase per il titolo e un paragrafo per la descrizione del ticket.