# THIS MAKEFILE HELPS TO 
# AUTO BUILD GH-PAGES

default: check

check:
	@echo "We're Good!"

generate-ci: 
	@echo "Generating!!!"
	mkdir -p _build
	cp -r site _build
	echo "GOOD!" > _build/more.html

	

	
