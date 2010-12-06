src=modelo

all:
	rubber -d $(src)
clean:
	rm -rf $(src).{aux,log,out}
distclean: clean
	rm -rf $(src).pdf
x:
	okular $(src).pdf &> /dev/null &	
