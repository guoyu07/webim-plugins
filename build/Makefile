all: think discuzx

think:
	@@echo "Build webim for ThinkSNS..."
	@@$(MAKE) -f thinksns.mk

discuzx:
	@@echo "Build webim for DiscuzX..."
	@@$(MAKE) -f discuzx.mk

clean: clean_thinksns clean_discuzx

clean_thinksns:
	@@echo "Clean ThinkSNS"
	@@$(MAKE) clean -f thinksns.mk

clean_discuzx:
	@@echo "Clean DiscuzX"
	@@$(MAKE) clean -f discuzx.mk

