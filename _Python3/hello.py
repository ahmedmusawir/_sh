import platform

def main():
	message()
	
def message():	
	print('Python Version {}' . format(platform.python_version()))
	print('line 2')
	if False:
		print('line 3')
	else:
		print('Not True')
	
	
if __name__ == '__main__': main()