import React,{Component} from 'react';
import {View, Text, TextInput} from 'react-native';

export default class App extends Component
{
  render()
  {
    return(
      <View>
        <image source={require('assets/images/WashMeLogo_CMYK.png')}></image>
      </View>
    );
  }
}