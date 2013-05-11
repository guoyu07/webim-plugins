include config.mk

PRODUCT_NAME = discuz

PRODUCT_DIR = ${DIST_DIR}/${PRODUCT_NAME}

all:
	@@mkdir -p ${PRODUCT_DIR}
	@@cp -r ../discuz ${PRODUCT_DIR}/webim
	@@cd ${PRODUCT_DIR} && tar czvf webim-for-discuz-${DATE}.tgz webim
	@@cd ${PRODUCT_DIR} && rm -rf webim

clean:
	@@echo "Removing product directory:" ${PRODUCT_DIR}
	@@rm -rf ${PRODUCT_DIR}

