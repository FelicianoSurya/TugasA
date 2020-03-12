import React,{Component} from 'react';
import {View, Text, TextInput, Image} from 'react-native';

export default class App extends Component
{
  render()
  {
    return(
      <View>
        <Image source={require('./assets/images/WashMeLogo_CMYK.png')} style={{width:'50%', height:'50%',resizeMode:"contain"}}></Image>
      </View>
    );
  }
}