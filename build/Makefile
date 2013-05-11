all: thinksns jishigou discuzx discuz

thinksns:
	@@echo "Build webim for ThinkSNS..."
	@@$(MAKE) -f thinksns.mk

jishigou:
	@@echo "Build webim for JishiGou..."
	@@$(MAKE) -f jishigou.mk

discuzx:
	@@echo "Build webim for DiscuzX..."
	@@$(MAKE) -f discuzx.mk

discuz:
	@@echo "Build webim for Discuz..."
	@@$(MAKE) -f discuz.mk

clean: clean_thinksns clean_jishigou clean_discuzx clean_discuz

clean_thinksns:
	@@echo "Clean ThinkSNS"
	@@$(MAKE) clean -f thinksns.mk

clean_jishigou:
	@@echo "Clean JishiGou"
	@@$(MAKE) clean -f jishigou.mk

clean_discuzx:
	@@echo "Clean DiscuzX"
	@@$(MAKE) clean -f discuzx.mk

clean_discuz:
	@@echo "Clean Discuz"
	@@$(MAKE) clean -f discuz.mk

