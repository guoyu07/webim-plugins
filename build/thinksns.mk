PRODUCT_NAME = thinksns

include config.mk

PRODUCT_DIR = ${DIST_DIR}/${PRODUCT_NAME}

all:
	@@mkdir -p ${PRODUCT_DIR}
	@@cp -r ../thinksns ${PRODUCT_DIR}/Webim
	@@cd ${PRODUCT_DIR} && tar czvf webim-for-thinksns-${VERSION}-${DATE}.tgz Webim
	@@cd ${PRODUCT_DIR} && rm -rf Webim

clean:
	@@echo "Removing product directory:" ${PRODUCT_DIR}
	@@rm -rf ${PRODUCT_DIR}

