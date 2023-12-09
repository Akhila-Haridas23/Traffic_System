import cv2

import time

import numpy as np

class cHelmet :

    def __init__( self ) :

        self.vHEIGHT = 416

        self.vWIDTH = 416

        self.vModelConf = r"C:\Users\HP\Desktop\PROJECT\my_programs (phython)\project\project\yolov3-obj.cfg"

        self.vModelWeights = r"C:\Users\HP\Desktop\PROJECT\my_programs (phython)\project\project\yolov3-obj_2400.weights"

        self.vNet = cv2.dnn.readNetFromDarknet( self.vModelConf, self.vModelWeights )

        self.vNet.setPreferableBackend( cv2.dnn.DNN_BACKEND_OPENCV )

        self.vNet.setPreferableTarget( cv2.dnn.DNN_TARGET_CPU )

        self.vCONF_THRESH = 0.5

        self.vNMS_THRESH = 0.4

        self.vPRINT_COUNT = 0

        self.vVERBOSE = False

    def fGetOutputsNames( self ) :

        '''Get names of the output layers.'''

        #print( '[ DEBUG ] Entered fGetOutputsNames' )

        self.vLayersNames = self.vNet.getLayerNames( )

        return [ self.vLayersNames[ i[ 0 ] - 1 ] for i in self.vNet.getUnconnectedOutLayers( ) ]

    def fPostProcess( self, fvFrame, fvNetOut ) :

        '''Overlay on frame.'''

        vFrHeight = fvFrame.shape[ 0 ]

        vFrWidth = fvFrame.shape[ 1 ]

        self.vFrameCountOut = 0

        vClassIds = [ ]

        vConfidences = [ ]

        vBoxes = [ ]

        for vOut in fvNetOut :

            for vDetection in vOut :

                vScores = vDetection[ 5: ]

                vClassId = np.argmax( vScores )

                vConfidence = vScores[ vClassId ]

                if vConfidence > self.vCONF_THRESH :

                    vCenterX = int( vDetection[ 0 ] * vFrWidth )

                    vCenterY = int( vDetection[ 1 ] * vFrHeight )

                    vWidth = int( vDetection[ 2 ] * vFrWidth )

                    vHeight = int( vDetection[ 3 ] * vFrHeight )

                    vLeft = int( vCenterX - vWidth / 2 )

                    vTop = int( vCenterY - vHeight / 2 )

                    vClassIds.append( vClassId )

                    vConfidences.append( float( vConfidence ) )

                    vBoxes.append( [ vLeft, vTop, vWidth, vHeight ] )

        vIndices = cv2.dnn.NMSBoxes( vBoxes, vConfidences, self.vCONF_THRESH, self.vNMS_THRESH )

        #print( '[ DEBUG ] Indices : {}'.format( vIndices ) )

        #print( '[ DEBUG ] vBoxes : {}'.format( vBoxes ) )

        vIndiceLen = len( vIndices )

        if vIndiceLen == 0 :

            print( '[ DEBUG ] No Helmet found.' )

            vLicensePNum = self.fFindLPNum( fvFrame ) ##<-- 

        else :

            print( '[ DEBUG ] {} helmet(s) found.' )

        '''

        vCount = 0

        for vIndice in vIndices :

            vIndex = vIndice[ 0 ]

            vBox = vBoxes[ vIndex ]

            vLeft = vBox[ 0 ]

            vTop = vBox[ 1 ]

            vWidth = vBox[ 2 ]

            vHeight = vBox[ 3 ]

            self.vFrameCountOut = self.fDrawPred( vClassIds[ vIndex ], vLeft, vTop, vLeft + vWidth, vTop + vHeight )

            # HERE<--

        '''

    def fFindLPNum( self, fvFrame ) :

        print( '[ DEBUG ] Inside License plate detector.' )

        pass
        
    def fHelmetMain( self, fvFrame ) :

        blob = cv2.dnn.blobFromImage( fvFrame, 1 / 255, ( self.vWIDTH, self.vHEIGHT ), [ 0, 0 , 0 ], 1, crop = False )
        
        self.vNet.setInput( blob )

        vStartTime = time.time( )

        vOuts = self.vNet.forward( self.fGetOutputsNames( ) )

        vEndTime = time.time( )

        vDelay = vEndTime - vStartTime

        #print( '[ DEBUG ] Forward delay : {}'.format( vDelay ) )

        #print( '[ DEBUG ] Type of outs : {}'.format( type( vOuts ) ) )

        #print( '[ DEBUG ] Length og outs : {}'.format( len( vOuts ) ) )

        '''for vIndex, vEachOut in enumerate( vOuts ) :

            print( '[ DEBUG ] Element {} in vOuts'.format( vIndex ) )

            print( '[ DEBUG ] Type of vOuts : {}'.format( type( vEachOut ) ) )

            print( '[ DEBUG ] Shape of vOuts : {}'.format( vEachOut.shape ) )''' 

        self.fPostProcess( fvFrame, vOuts )
        
