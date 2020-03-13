import React from 'react';
import {TouchableOpacity,View, Text,StyleSheet} from 'react-native';
import {Colors} from '../config/colors';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';

export const ButtonViewBack = props => {
    const content = (
        <View style={[style.button]}>
            <Text style={style.text}>{props.text}</Text>
        </View> 
    )
    function press(navigation){
        const pressHandler = () =>{
            navigation.push('secondStarted');
    }
}
    return <TouchableOpacity onPress={pressHandler}>{content}</TouchableOpacity>
}


export const style = StyleSheet.create({
    button : {
      backgroundColor : '#0FB6CC',
      width: 128,
      padding:10,
      borderRadius:50
    },
    text : {
        color:"white",
        fontSize : 15,
        textAlign:"center",
    }
  });

  export default ButtonViewBack;