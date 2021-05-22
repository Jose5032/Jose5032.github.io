import MySQLdb as db

conn = db.connect("localhost","root","rooter","test")
cur = conn.cursor()
cur.execute("create table users(na text)")
row = cur.fetchall()
print(row)
