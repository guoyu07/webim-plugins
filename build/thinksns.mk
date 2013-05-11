include build/config.mk

PRODUCT_NAME = thinksns

PRODUCT_DIR = ${DIST_DIR}/${PRODUCT_NAME}

all:
	@@mkdir -p ${PRODUCT_DIR}
	@@cp -r ${PREFIX}/thinksns ${PRODUCT_DIR}/Webim
	@@cd ${PRODUCT_DIR} && tar czvf webim-for-thinksns-${DATE}.tgz Webim
	@@cd ${PRODUCT_DIR} && rm -rf Webim

clean:
	@@echo "Removing product directory:" ${PRODUCT_DIR}
	@@rm -rf ${PRODUCT_DIR}

