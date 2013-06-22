all: thinksns jishigou phpwind phpwind9 discuzx discuz uchome

thinksns:
	@@echo "Build webim for ThinkSNS..."
	@@$(MAKE) -f thinksns.mk

jishigou:
	@@echo "Build webim for JishiGou..."
	@@$(MAKE) -f jishigou.mk

phpwind:
	@@echo "Build webim for PhpWind..."
	@@$(MAKE) -f phpwind.mk

phpwind9:
	@@echo "Build webim for PhpWind9..."
	@@$(MAKE) -f phpwind9.mk

discuzx:
	@@echo "Build webim for DiscuzX..."
	@@$(MAKE) -f discuzx.mk

discuz:
	@@echo "Build webim for Discuz..."
	@@$(MAKE) -f discuz.mk

uchome:
	@@echo "Build webim for UCHome..."
	@@$(MAKE) -f uchome.mk

clean: clean_thinksns clean_jishigou clean_phpwind9 clean_phpwind clean_discuzx clean_discuz clean_uchome

clean_thinksns:
	@@echo "Clean ThinkSNS"
	@@$(MAKE) clean -f thinksns.mk

clean_jishigou:
	@@echo "Clean JishiGou"
	@@$(MAKE) clean -f jishigou.mk

clean_phpwind:
	@@echo "Clean PhpWind"
	@@$(MAKE) clean -f phpwind.mk

clean_phpwind9:
	@@echo "Clean PhpWind9..."
	@@$(MAKE) clean -f phpwind9.mk

clean_discuzx:
	@@echo "Clean DiscuzX"
	@@$(MAKE) clean -f discuzx.mk

clean_discuz:
	@@echo "Clean Discuz"
	@@$(MAKE) clean -f discuz.mk

clean_uchome:
	@@echo "Clean UCHome"
	@@$(MAKE) clean -f uchome.mk

