# THIS MAKEFILE HELPS TO 
# AUTO BUILD GH-PAGES

default: check

check:
	@echo "We're Good!"

generate-ci: 
	mkdir -p _build
	cp -r site/* _build
	php ./script/test.php > _build/index.html

	@echo "Generating Done!!!"

	

	
