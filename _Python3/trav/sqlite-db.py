#DB ACCESS

import sqlite3

def main():
	print('connect')
	db = sqlite3.connect('moose-api.db')
	cur = db.cursor()
	print('-------------------------')	
	print('creating table test')
	print('-------------------------')	
	cur.execute("DROP TABLE IF EXISTS test")
	cur.execute("""
		CREATE TABLE test (
			id INTEGER PRIMARY KEY, string TEXT, number INTEGER
		)
		""")
	print('inserting row 1')
	cur.execute("""
		INSERT INTO test (string, number) VALUES ('data line one', 100)
		""")
	print('inserting row 2')
	cur.execute("""
		INSERT INTO test (string, number) VALUES ('data line two', 20000)
		""")
	print('inserting row 3')
	cur.execute("""
		INSERT INTO test (string, number) VALUES ('data line three', 3000000)
		""")
	print('commit')
	db.commit()
	print('-------------------------')	
	print('Counting rows ...')
	print('-------------------------')	
	cur.execute("SELECT COUNT(*) FROM test")
	count = cur.fetchone()[0]
	print(f'there are {count} rows in the table.')
	print('-------------------------')
	print('reading from table test')
	print('-------------------------')
	for row in cur.execute("SELECT * FROM test"):
		print(row)
	print('-------------------------')
	print('dropping table test')
	print('-------------------------')
	cur.execute("DROP TABLE test")
	print('close')
	db.close()

if __name__ == '__main__': main()
