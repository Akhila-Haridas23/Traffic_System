import os

import tensorflow.compat.v1 as tf

tf.disable_v2_behavior( )

import cv2

import numpy as np

import time

from imutils.video.webcamvideostream import WebcamVideoStream

from mNames import vNames

import pyttsx3

class cProcess :

    def __init__( self ) :

        self.vEngine = pyttsx3.init( )

        #self.vWVS = WebcamVideoStream( r"C:\Users\DELL\Documents\work\major\conda37\project_prepare\active\pBlindAssist\pResource\pTest\pVideo\Skyfall - Opening Scene- Train Fight (1080p).mp4" ).start( )

        self.vWVS = WebcamVideoStream( ).start( )

        self.vPathToPb = r"C:\Users\DELL\Documents\work\major\conda37\project_prepare\active\pBlindAssist\pResource\pSsdMobilenetV2Coco\ssd_mobilenet_v2_coco_2018_03_29\frozen_inference_graph.pb"

        self.vTensorDict, self.vSess, self.vImageTensor = self.fLoadModel( )

        time.sleep( 1 )

    def fRun( self ) :

        while True :

            self.vFrame = self.vWVS.read( )

            self.vRawPrediction = self.fPredictOn( )

            #print( '[ DEBUG ] vRawPrediction : {}'.format( self.vRawPrediction ) )

            vDrawnFrame = self.fDraw( )

            self.fGetClassName( )

            cv2.imshow( 'Image', vDrawnFrame )

            if cv2.waitKey( 1 ) == ord( 'q' ) :

                self.vSess.close( )
                
                break

    def fDraw( self ) :

        #print( '[ DEBUG ] Boxes array shape : {}'.format( self.vRawPrediction[ 'detection_boxes' ].shape ) )

        for vBBoxes in self.vRawPrediction[ 'detection_boxes' ][ :1 ] :

            #print( '[ DEBUG ] Box : {}'.format( vBBoxes ) )

            for vBBox in vBBoxes :

                vYMin = vBBox[ 0 ] * self.vFrame.shape[ 0 ]

                vXMin = vBBox[ 1 ] * self.vFrame.shape[ 1 ]

                vYMax = vBBox[ 2 ] * self.vFrame.shape[ 0 ]

                vXMax = vBBox[ 3 ] * self.vFrame.shape[ 1 ]

                #print( '[ DEBUG ] Co-ordinates : {}'.format( ( vX1, vY1, vX2, vY2 ) ) )

                cv2.rectangle( self.vFrame, ( int( vXMin ), int( vYMin ) ) , ( int( vXMax ), int( vYMax ) ), ( 255, 0, 0 ), 2 )

        return self.vFrame

    def fGetClassName( self ) :

        vClassList = [ ]

        vClasses = self.vRawPrediction[ 'detection_classes' ]

        vScores = self.vRawPrediction[ 'detection_scores' ]

        #print( '[ DEBUG ] vScores : {}'.format( vScores ) )

        #print( '[ DEBUG ] Shape of vClasses : {}'.format( vClasses.shape ) )

        #print( '[ DEBUG ] I think there is :' )

        for vClass, vScore in zip( vClasses[ 0 ], vScores[ 0 ] ) :

            if vScore >= 0.5 :

                vClassList.append( vClass )

        for vItem in vClassList :

            #print( '{}'.format( vNames[ int( vItem ) ] ) )

            self.vEngine.say( vNames[ int( vItem ) ] )

            self.vEngine.runAndWait( )

    def fPreProcess( self ) :

        return np.expand_dims( self.vFrame, 0 )

    def fPredictOn( self ) :

        return self.vSess.run( self.vTensorDict, feed_dict = { self.vImageTensor : np.expand_dims( self.vFrame, 0 ) } )

    def fLoadModel( self ) :

        vDetectionGraph = tf.Graph( )

        with vDetectionGraph.as_default( ) :

            vODGraphDef = tf.GraphDef( )

            with tf.gfile.GFile( self.vPathToPb, mode = 'rb' ) as vFile :

                vSerializedGraph = vFile.read( )

                vODGraphDef.ParseFromString( vSerializedGraph )

                tf.import_graph_def( vODGraphDef, name = '' )

            vSess = tf.Session( ) 

            vOps = tf.get_default_graph( ).get_operations( )

            vAllTensorNames = set( )

            for vOp in vOps :

                for vOutPut in vOp.outputs :

                    vAllTensorNames.add( vOutPut.name )

            vTensorDict = { }

            #print( '[ DEBUG ] vAllTensorNames : {}'.format( vAllTensorNames ) )

            for vKey in [ 'num_detections', 'detection_boxes', 'detection_scores', 'detection_classes', 'detection_masks' ] :

                vTensorName = vKey + ':0'

                if vTensorName in vAllTensorNames :

                    vTensorDict[ vKey ] = tf.get_default_graph( ).get_tensor_by_name( vTensorName )

            #print( '[ DEBUG ] vTensorDict : {}'.format( vTensorDict ) )

            vImageTensor = tf.get_default_graph( ).get_tensor_by_name( 'image_tensor:0' ) 

            return vTensorDict, vSess, vImageTensor
                

def fMain( ) :

    oProcess = cProcess( )

    oProcess.fRun( )

if __name__ == '__main__' :

    fMain( )



