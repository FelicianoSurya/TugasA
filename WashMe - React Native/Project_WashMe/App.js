import React,{Component} from 'react';
import {
  View, 
  Text,
  Image,
  Button,
  StyleSheet,
  TouchableOpacity
  } from 'react-native';
import MainService from './app/service/mainservice';
import {Color} from './app/config/colors';
import {ButtonViewBack} from './app/components/ButtonView'; 
import 'react-native-gesture-handler';
import  NavigationContainer  from '@react-navigation/native';
import createStackNavigator from '@react-navigation/stack';


export default class App extends Component
{
  state = {
    loaded : false,
  }

  constructor(){
    super();
    MainService.load(v=>this.setState({loaded : true}));
  }
  render()
  {
    return(
      <View style={{widht:"100%",height:"100%"}}>
        {this.state.loaded ?
        <View style={{widht:'100%',height:'100%',flexDirection:"column",backgroundColor:'white'}}>
          <View style={{widht:'100%',height:'50%',justifyContent:"flex-end"}}>
            <Image source={require('./assets/images/microfiber_towels_d_2x.png')} style={{width:352,height:239,resizeMode:"contain"}}></Image>
          </View>
          <View>
            <Text style={{textAlign:'center',fontSize:23,fontWeight:'bold'}}>Let's Get Started</Text>
          </View>
          <View style={{alignItems:"center",padding:10}}>
            <Text style={{textAlign:'center',fontSize:17,color:'#B9C4D3',width:290}}>WashMe is the ultimate solution to get your laundry done</Text>
          </View>
          <View style={{flexDirection:"row",alignItems:"center",justifyContent:'center'}}>
            <View style={{width:12,height:12,borderRadius:100/2,backgroundColor:"#0FB6CC",margin:8}}></View>
            <View style={{width:8,height:8,borderRadius:100/2,backgroundColor:"#B9C4D3",margin:8}}></View>
            <View style={{width:8,height:8,borderRadius:100/2,backgroundColor:"#B9C4D3",margin:8}}></View>
          </View>
          <View style={{height:'20%',justifyContent:"flex-end",alignItems:"center"}}>
            {/* <ButtonViewBack text="Next"></ButtonViewBack> */}
            <TouchableOpacity onPress={this.state.navigation.navigate('secondStarted')} style={{backgroundColor: "black"}}><Text>Next</Text></TouchableOpacity>
          </View>
        </View> 
        : 
        <View style={{widht:'100%',height:'100%',alignItems:"center",justifyContent:"center"}}>
        <Image source={require('./assets/images/WashMeLogo_CMYK.png')} style={{width:'50%', height:'50%',resizeMode:"contain"}}></Image>
        </View>}
      </View>
    );
  }
}
