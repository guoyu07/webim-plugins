
PRODUCT_NAME = phpwind9

include config.mk

PRODUCT_DIR = ${DIST_DIR}/${PRODUCT_NAME}

all:
	@@mkdir -p ${PRODUCT_DIR}
	@@cp -r ../phpwind9 ${PRODUCT_DIR}/webim
	@@cd ${PRODUCT_DIR} && tar czf webim-for-phpwind9-${VERSION}-${DATE}.tgz webim
	@@cd ${PRODUCT_DIR} && rm -rf webim

clean:
	@@echo "Removing product directory:" ${PRODUCT_DIR}
	@@rm -rf ${PRODUCT_DIR}

